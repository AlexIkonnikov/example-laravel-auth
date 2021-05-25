@extends('layouts.main')
@section('content')
<div class="container">
    <h1>Личный кабинет</h1>

    <div class="d-flex align-items-start">
        <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
            <button class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Профиль</button>
            <button class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile" type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Сообщения</button>
            <button class="nav-link" id="v-pills-posts-tab" data-bs-toggle="pill" data-bs-target="#v-pills-posts" type="button" role="tab" aria-controls="v-pills-posts" aria-selected="false">Посты</button>
            <button class="nav-link" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-new" type="button" role="tab" aria-controls="v-pills-new" aria-selected="false">Новый пост</button>
        </div>

        <div class="tab-content" id="v-pills-tabContent">
            <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                <div class="col">
                    <div>Имя: {{ Auth::user()->name }}</div>
                    <div>Ваш email: {{ Auth::user()->email }}</div>
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">

            </div>

            <div class="tab-pane fade" id="v-pills-posts" role="tabpanel" aria-labelledby="v-pills-posts-tab">
                <div class="col">
                    @foreach ($posts as $post)
                        <div>{{ $post->title }}</div>
                    @endforeach
                </div>
            </div>

            <div class="tab-pane fade" id="v-pills-new" role="tabpanel" aria-labelledby="v-pills-new-tab">

                <div class="col">
                    <form method="POST" action="/post/store">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Заголовок</label>
                            <input type="text" class="form-control" id="title" name="title">
                        </div>
                        <div class="mb-3">
                            <label for="image_url" class="form-label">Ссылка на фотографию</label>
                            <input type="text" class="form-control" id="image_url" name="image_url">
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Текст поста</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="text"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>

            </div>

        </div>
    </div>
</div>
@endsection