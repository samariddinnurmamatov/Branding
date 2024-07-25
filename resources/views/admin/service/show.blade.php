<?php

$lang = \Illuminate\Support\Facades\App::getLocale()

?>

<x-layouts.admin>

    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Nima uchun biz</h4>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">

                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Title {{ $lang }}</label>
                                    <p>{{ $service['title_' . $lang] }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Description {{ $lang }}</label>
                                    <p>{!! $service['description_' . $lang] !!}</p>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="mb-3 col-md-4">
                                    <label class="form-label">Image</label>
                                    @if ($service->image)
                                        <img src="{{ asset('storage/' . $service->image) }}" alt="Logo" class="img-fluid">
                                    @else
                                        <p>No image available</p>
                                    @endif
                                </div>

                                <div class="mb-3 col-md-4">
                                    
                                </div>
                                <div class="col-md-4">
                                    <a href="{{ route('services.edit', $service->id) }}" class="btn btn-primary btn-squared px-30 mb-3">O'zgartirish</a><br>
                                    <a href="{{ route('services.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>

                                </div>
                            </div>
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->

</x-layouts.admin>
