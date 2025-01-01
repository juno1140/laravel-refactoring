<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;
use Illuminate\Support\Facades\Gate;
use Illuminate\Auth\Access\Response;
class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): Response
    {
        return Gate::authorize('update', $this->article);
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'   => 'required|string|max:255',
            'content' => 'required|string'
        ];
    }

    /**
     * バリデーションエラー時のカスタムメッセージ
     */
    public function attributes(): array
    {
        return [
            'title'   => 'タイトル',
            'content' => '内容'
        ];
    }

    /**
     * バリデーション失敗時のカスタムレスポンス
     */
    protected function failedValidation(Validator $validator)
    {
        // JSON形式でエラーを投げたい場合、HttpResponseException をスロー
        throw new HttpResponseException(
            response()->json(
                [
                    'message' => '入力エラーがあります。',
                    'errors'  => $validator->errors()
                ],
                422
            )
        );
    }
}
