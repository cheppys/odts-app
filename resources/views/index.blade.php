@extends('layouts.index')


@section('content')

<div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach ($posts as $post)
                    @include ('partials.post', ['post' => $post])
                @endforeach
              

                {{ $posts ->links()}}
                <!-- Pager -->
                {{-- <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul> --}}
            </div>
        </div>

@stop