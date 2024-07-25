<x-layouts.admin>
    <div class="px-3">
        <div class="container-fluid">
            <div class="py-3 py-lg-4">
                <div class="row">
                    <div class="col-lg-6">
                        <h4 class="page-title mb-0">Yangiliklar</h4>
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
                <form action="{{ route('portfolios.store') }}" method="post" enctype="multipart/form-data" onsubmit="updateEditorContent()">
                    @csrf
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4 mb-25 my-5 uz">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_uz" placeholder="Title UZ">
                            </div>
                            <div class="col-md-4 mb-25 my-5 ru">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_ru" placeholder="Title RU">
                            </div>
                            <div class="col-md-4 mb-25 my-5 en">
                                <input type="text" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="title_en" placeholder="Title EN">
                            </div>
                        </div>
                    </div>
                    <div class="container-fluid">
                        <div class="col-md-4 mb-5">
                            <select name="service_ids[]" class="form-control" multiple>
                                @foreach($services as $service)
                                    <option value="{{ $service->id }}" {{ in_array($service->id, old('service_ids', [])) ? 'selected' : '' }}>{{ $service->title_uz }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="container-fluid uz">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_uz</h4>
                                        <div id="editor_uz" style="height: 300px;"></div>
                                        <input type="hidden" name="description_uz" id="text_uz">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid ru">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_ru</h4>
                                        <div id="editor_ru" style="height: 300px;"></div>
                                        <input type="hidden" name="description_ru" id="text_ru">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container-fluid en">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title">Description_en</h4>
                                        <div id="editor_en" style="height: 300px;"></div>
                                        <input type="hidden" name="description_en" id="text_en">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4 mb-25">
                            <label for="" class="form-control">1-rasmni kiriting</label>
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image">
                        </div>
                        <div class="col-md-4 mb-25">
                            <label for="" class="form-control">2-rasmni kiriting</label>
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image1">
                        </div>
                        <div class="col-md-4 mb-25">
                            <label for="" class="form-control">3-rasmni kiriting</label>
                            <input type="file" class="form-control ih-medium ip-gray radius-xs b-light px-15" name="image2">
                        </div>
                        <div class="col-md-6">
                            <div class="layout-button mt-0">
                                <a href="{{ route('portfolios.index') }}" class="btn btn-default btn-squared btn-light px-20">Orqaga</a>
                                <button type="submit" class="btn btn-primary btn-default btn-squared px-30">Saqlash</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">

    <script>
        var editorUz = new Quill('#editor_uz', { theme: 'snow' });
        var editorRu = new Quill('#editor_ru', { theme: 'snow' });
        var editorEn = new Quill('#editor_en', { theme: 'snow' });

        function updateEditorContent() {
            document.getElementById('text_uz').value = editorUz.root.innerHTML;
            document.getElementById('text_ru').value = editorRu.root.innerHTML;
            document.getElementById('text_en').value = editorEn.root.innerHTML;
        }
    </script>
</x-layouts.admin>