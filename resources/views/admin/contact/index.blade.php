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
                        <h4 class="page-title mb-0">Contact Information</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <li class="breadcrumb-item"><a href="javascript: void(0);">Home</a></li>
                                <li class="breadcrumb-item active">Contacts</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title -->
            <div class="row mb-3">
                <div>
                    <a class="btn btn-primary" href="{{ route('contacts.create') }}">Yaratish</a>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body ">
                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                <thead>
                                <tr>
                                    <th>Email</th>
                                    <th>Address</th>
                                    <th>Phone</th>
                                    <th>Telegram</th>
                                    <th>Actions</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->address }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->telegram }}</td>
                                        <td>
                                            <div class="mx-1 d-inline-block">
                                                <a href="{{ route('contacts.edit', $contact->id) }}"><i class="mdi mdi-book-edit-outline fs-3"></i></a>
                                            </div>
                                            <div class="mx-1 d-inline-block">
                                                <a href="{{ route('contacts.show', $contact->id) }}"><i class="mdi mdi-eye fs-3"></i></a>
                                            </div>
                                            <div class="mx-1 d-inline-block">
                                                <form action="{{ route('contacts.destroy', $contact->id) }}" method="POST" onsubmit="return confirm('Are you sure you want to delete this contact?')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" style="border: none; background: none; color: rgb(181 146 255); cursor: pointer;"><i class="mdi mdi-trash-can-outline fs-3"></i></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            {{ $contacts->links() }}
                        </div> <!-- end card body-->
                    </div> <!-- end card -->
                </div><!-- end col-->
            </div>
            <!-- end row-->
        </div> <!-- container -->
    </div> <!-- content -->
</x-layouts.admin>
