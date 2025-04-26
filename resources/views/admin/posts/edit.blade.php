@extends('admin.layouts.base')




@section('content')

<div class="content">

    <x-admin.content-header :title="__('admin.title.blog')" />



    <div class="content-box">

        <div class="content-box-top">



            <x-admin.link href="{{ route('admin.posts.index') }}" class="admin-link">

                <svg class="admin-link-icon" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75 3 12m0 0 3.75-3.75M3 12h18" />
                </svg>


                <span>

                    {{__('admin.button.back')}}

                </span>

            </x-admin.link>

        </div>



        <div class="content__item">
            <div class="card">

                <h3 class="card__title title-h3">

                    {{__('admin.title.post-edit')}}

                </h3>

                <div class="card-body">


                    <x-admin.errors />

                    <x-admin.form action="{{ route('admin.posts.update', $post->id) }}" enctype="multipart/form-data" method="PUT"
                        class="card-form">


                        <div class="card-body__group">

                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.title')}} </x-admin.label>

                                <x-admin.input name="title" value="{{ $post->title }}" />

                            </x-admin.form-item>

                            <x-admin.form-item>

                                <x-admin.label class="label-group">
                                    {{ __('admin.label.slug') }}

                                    <span>
                                        <span>{{ __('admin.label.slug-url') }}</span>
                                        <span>{{ __('https://slugify.online') }}</span>
                                    </span>

                                </x-admin.label>

                                <x-admin.input name="slug" value="{{ $post->slug }}" />

                            </x-admin.form-item>

                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.views') }} </x-admin.label>

                                <x-admin.input name="views" value="{{ $post->views }}" type="number" style="max-width: 200px" />

                            </x-admin.form-item>




                        </div>

                        {{-- ? trix desc tollbar hidden --}}
                        <div class="card-body__group summernote-editor">
                            <x-admin.form-item>
                                <x-admin.label> {{__('admin.label.desc')}}
                                </x-admin.label>
                                <x-admin.summernote name="description">{{ $post->description }}</x-admin.summernote>
                            </x-admin.form-item>
                        </div>



                        {{-- ? image post --}}
                        <div class="card-body__group">
                            <div class="image-add-group">

                                <x-admin.form-item>

                                    <x-admin.label> {{__('admin.label.image')}} </x-admin.label>

                                    @if ($post->image)
                                    <x-admin.image class="picture-block">

                                        {{-- <img class="poster-loaded" src="{{ $post->image  }}" alt=""> --}}
                                        <img class="poster-loaded" src="{{ asset('storage/' . $post->image ) }}" alt="">

                                    </x-admin.image>
                                    @else

                                    <x-admin.image class="picture-block hidden"></x-admin.image>

                                    @endif



                                    <x-admin.input-file name="image" type="file" id="input-file"
                                        accept="image/png, image/jpeg, image/webp" />

                                </x-admin.form-item>

                            </div>

                        </div>



                        {{-- ? trix body and add files --}}
                        <div class="card-body__group summernote-editor">
                            <x-admin.form-item>
                                <x-admin.label> {{__('admin.label.body')}}
                                </x-admin.label>
                                <x-admin.summernote name="body">{{ $post->body }}</x-admin.summernote>
                            </x-admin.form-item>
                        </div>



                        {{-- ? published --}}
                        <div class="card-body-box">
                            <h4 class="card-body-box__title title-h4">{{ __('admin.title.published') }}</h4>

                            <div class="card-body__group card-body__group-switch">
                                <x-admin.form-item>

                                    <x-admin.checkbox name="published" :checked="$post->published" id="published" role="switch" />

                                    <x-admin.label for="published">
                                        <span></span>
                                    </x-admin.label>
                                </x-admin.form-item>
                            </div>
                        </div>




                        <div class="buttons-box">

                            <x-admin.button type="submit" class="btn-create">

                                {{ __('admin.button.update') }}

                            </x-admin.button>

                        </div>



                    </x-admin.form>


                </div>

            </div>

        </div>







    </div>


</div>

@endsection