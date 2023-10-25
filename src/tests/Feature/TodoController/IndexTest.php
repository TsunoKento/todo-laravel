<?php

namespace Tests\Feature;

use App\Models\Todo;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Http\Response;
use Tests\TestCase;

class TodoControllerTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;

    public function test_TODOが一件もない(): void
    {
        // Act
        $response = $this->json('GET', '/api/todos');

        // Assert
        $response->assertStatus(Response::HTTP_OK)
            ->assertJson([
                "data" => [],
            ]);
    }

    public function test_TODOの一覧が取得できる(): void
    {
        // テスト用のデータを作成する
        $todos = Todo::factory(5)->create();

        // Act
        $response = $this->json('GET', '/api/todos');

        // Assert
        $response->assertStatus(Response::HTTP_OK)
            ->assertJson([
                "data" => $todos->map(function ($todo) {
                    return [
                        "id" => $todo->id,
                        "title" => $todo->title,
                    ];
                })->toArray(),
            ]);
    }
}
