@extends("layouts.default")

@section("title", "アップロード画像の表示")
@section("content")
  @if(session()->has("success"))
    <p>{{ session()->get("success") }}</p>
  @endif
  <img src="{{ asset("storage/photos/". $fileName) }}" alt="">
@endsection