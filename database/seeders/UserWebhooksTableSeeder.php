<?php

namespace Database\Seeders;

use App\Models\UserWebHook;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserWebhooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $webhooks = [
            [
                'user_id'=>2,
                'url'=>'http://localhost:8000/api/partners/webhook/subscription',
                'secret_key'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNjc4OTc5Mjk0LCJleHAiOjE2Nzg5ODI4OTQsIm5iZiI6MTY3ODk3OTI5NCwianRpIjoiemdSMEEzbzF1czhLODJNeCIsInN1YiI6IjIiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.l-99A7MA9TrAQsUgDq9zGHIADZ5VMIo3iAZ9g3kuBGE',
            ],
            [
                'user_id'=>1,
                'url'=>'http://localhost:8000/api/merchents/webhook/notification',
                'secret_key'=>'Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJodHRwOi8vbG9jYWxob3N0OjgwMDAvYXBpL2xvZ2luIiwiaWF0IjoxNjc4OTczOTMxLCJleHAiOjE2Nzg5Nzc1MzEsIm5iZiI6MTY3ODk3MzkzMSwianRpIjoiMG1VT1JKRjMxbmVMMmJ0WCIsInN1YiI6IjEiLCJwcnYiOiIyM2JkNWM4OTQ5ZjYwMGFkYjM5ZTcwMWM0MDA4NzJkYjdhNTk3NmY3In0.BKNZcIyiu7-Iux0a82A-mtlpKKa3i_ZXGu0M-2yfvJk',
            ],
        ];

        foreach ($webhooks as $key => $webhook) {
            UserWebHook::create($webhook);
        }
    }
}
