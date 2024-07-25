<x-layouts.admin>
    <div class="px-3">
        <!-- Start Content-->
        <div class="container-fluid">
            <!-- start page title -->
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Create Contact</h4>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-none d-lg-block">
                            <ol class="breadcrumb m-0 float-end">
                                <button class="btn" onClick="changeLang('uz')" style="background: #0c4a4a">UZ</button>
                                <button class="btn" onClick="changeLang('ru')" style="background-color: #0c4a6e">RU</button>
                                <button class="btn" onClick="changeLang('en')" style="background-color: #0c4a8e">EN</button>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body py-md-30">
                <form action="{{ route('contacts.store')}}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf

                    {{-- Email --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="email" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="email" placeholder="Email" required>
                        </div>
                    </div>

                    {{-- Address --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="address" placeholder="Address" required>
                        </div>
                    </div>

                    {{-- Phone --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="phone" placeholder="Phone" required>
                        </div>
                    </div>

                    {{-- Instagram --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="instagram" placeholder="Instagram">
                        </div>
                    </div>

                    {{-- Telegram --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="telegram" placeholder="Telegram">
                        </div>
                    </div>

                    {{-- Facebook --}}
                    <div class="row">
                        <div class="col-md-4 mb-25 my-5">
                            <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="facebook" placeholder="Facebook">
                        </div>
                    </div>

                    {{-- Actions --}}
                    <div class="row">
                        <div class="col-md-6 mb-25">
                            <div class="layout-button mt-0">
                                <a href="{{ route('contacts.index')}}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Saqlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-layouts.admin>
