<?php

$lang = \Illuminate\Support\Facades\App::getLocale();

?>

<x-layouts.admin>

    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Contact</h4>
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
                                    <label class="form-label" style="text-transform: uppercase">Email</label>
                                    <p>{{ $contact->email }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Address</label>
                                    <p>{{ $contact->address }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Phone</label>
                                    <p>{{ $contact->phone }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Instagram</label>
                                    <p>{{ $contact->instagram }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Telegram</label>
                                    <p>{{ $contact->telegram }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="mb-3 col-md-12">
                                    <label class="form-label" style="text-transform: uppercase">Facebook</label>
                                    <p>{{ $contact->facebook }}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-md-4">
                                    <a href="{{ route('contacts.edit', $contact->id) }}" class="btn btn-primary btn-squared px-30 mb-3">O'zgartirish</a><br>
                                    <a href="{{ route('contacts.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>
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
