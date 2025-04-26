@extends('admin.layouts.base')




@section('content')

<div class="content">

    <x-admin.content-header :title="__('admin.title.services')" />



    <div class="content-box">

        <div class="content-box-top">



            <x-admin.link href="{{ route('admin.services.index') }}" class="admin-link">

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

                    {{__('admin.title.services-edit')}}

                </h3>

                <div class="card-body">


                    <x-admin.errors />

                    <x-admin.form action="{{ route('admin.services.update', $service->id) }}" enctype="multipart/form-data" method="PUT"
                        class="card-form">


                        {{-- ? select service categories --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.service-categories')}} </x-admin.label>

                                <x-admin.select name="service_category_id" style="max-width: 300px">
                                    <option value="">Choose category</option>

                                    @foreach ($categories as $category)

                                    @if (old('service_category_id'))

                                    <option value="{{ $category->id }}" {{ (old('service_category_id')==$category->id ) ? 'selected': '' }}>

                                        {{ $category->name }}

                                    </option>

                                    @else


                                    <option value="{{ $category->id }}" {{ ($service->service_category_id == $category->id ) ?
                                        'selected':
                                        '' }}>

                                        {{ $category->name }}

                                    </option>

                                    @endif


                                    @endforeach


                                </x-admin.select>

                            </x-admin.form-item>
                        </div>


                        {{-- ? name --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.name')}} </x-admin.label>
                                <x-admin.input value="{{ $service->name }}" name="name" style="max-width: 300px" />

                            </x-admin.form-item>
                        </div>

                        {{-- ? icon --}}
                        <div class="card-body__group">
                            <div class="image-add-group">
                                <x-admin.form-item>

                                    <x-admin.label> {{__('admin.label.icon')}} </x-admin.label>

                                    @if ($service->icon)

                                    <x-admin.image class="picture-block">
                                        <img class="poster-loaded" src="{{ asset('storage/' . $service->icon ) }}" alt="">
                                    </x-admin.image>

                                    @else

                                    <x-admin.image class="picture-block hidden"></x-admin.image>

                                    @endif

                                    <x-admin.input-file name="icon" type="file" accept="image/png, image/jpeg, image/webp" />

                                </x-admin.form-item>
                            </div>

                        </div>



                        <div class="card-body-row">

                            {{-- ? interset --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.interset') }} </x-admin.label>
                                    <x-admin.input value="{{ $service->interset }}" type="number" name="interset" min="0.01" max="100"
                                        step="0.01" style="width: 200px" />

                                </x-admin.form-item>

                            </div>

                            {{-- ? term --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.term') }} </x-admin.label>
                                    <x-admin.input value="{{ $service->term }}" type="number" name="term" min="1" step="1"
                                        style="width: 200px" />

                                </x-admin.form-item>

                            </div>



                            {{-- ? amount --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.amount') }} </x-admin.label>
                                    <x-admin.input value="{{ $service->amount }}" type="number" name="amount" min="1" step="1"
                                        style="width: 200px" />

                                </x-admin.form-item>

                            </div>

                            {{-- ? promo_code --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.promo-code')}} </x-admin.label>
                                    <x-admin.input value="{{ $service->promo_code }}" name="promo_code" style="width: 200px" />

                                </x-admin.form-item>
                            </div>




                            {{-- ? promo_discount --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.promo-discount')}} </x-admin.label>
                                    <x-admin.input value="{{ $service->promo_discount }}" type="number" name="promo_discount" min="1"
                                        step="1" style="width: 200px" />

                                </x-admin.form-item>
                            </div>

                            {{-- ? vote_rating --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.vote-rating')}} </x-admin.label>
                                    <x-admin.input value="{{ $service->vote_rating }}" type="number" name="vote_rating" min="1" max="10"
                                        step="1" style="width: 200px" />

                                </x-admin.form-item>
                            </div>

                            {{-- ? vote_count --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.vote-count')}} </x-admin.label>
                                    <x-admin.input value="{{ $service->vote_count }}" type="number" name="vote_count" min="1" step="1"
                                        style="width: 200px" />

                                </x-admin.form-item>
                            </div>

                            {{-- ? rating --}}
                            <div class="card-body__group">
                                <x-admin.form-item>

                                    <x-admin.label> {{ __('admin.label.rating') }} </x-admin.label>
                                    <x-admin.input value="{{ $service->rating }}" type="number" name="rating" min="0.01" max="10"
                                        step="0.01" style="width: 200px" />

                                </x-admin.form-item>

                            </div>
                        </div>




                        <div class="card-body-line"></div>


                        {{-- ? url --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.url')}} </x-admin.label>
                                <x-admin.input value="{{ $service->url }}" type="url" name="url" />

                            </x-admin.form-item>
                        </div>

                        {{-- ? license --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.license')}} </x-admin.label>
                                <x-admin.input value="{{ $service->license }}" name="license" style="max-width: 500px" />

                            </x-admin.form-item>
                        </div>

                        {{-- ? comp_name --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.comp-name')}} </x-admin.label>
                                <x-admin.input value="{{ $service->comp_name }}" name="comp_name" />

                            </x-admin.form-item>
                        </div>

                        {{-- ? email --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.email')}} </x-admin.label>
                                <x-admin.input value="{{ $service->email }}" type="email" name="email" style="max-width: 500px" />

                            </x-admin.form-item>
                        </div>

                        {{-- ? address --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.address')}} </x-admin.label>
                                <x-admin.input value="{{ $service->address }}" name="address" />

                            </x-admin.form-item>
                        </div>
                        {{-- ? phone --}}
                        <div class="card-body__group">
                            <x-admin.form-item>

                                <x-admin.label> {{ __('admin.label.phone')}} </x-admin.label>
                                <x-admin.input value="{{ $service->phone }}" name="phone" style="max-width: 500px" />

                            </x-admin.form-item>
                        </div>


                        {{-- ? published --}}
                        <div class="card-body-box">
                            <h4 class="card-body-box__title title-h4">{{ __('admin.title.published') }}</h4>

                            <div class="card-body__group card-body__group-switch">
                                <x-admin.form-item>

                                    <x-admin.checkbox name="published" :checked="$service->published" id="published" role="switch" />

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