@extends('Admin.app')
@section('content')
<div class="card">
    <form method="post" action="/setting" enctype="multipart/form-data" id="myForm">
        @if(isset($slideshow)) @method('PUT') @else @method('POST') @endif
        @csrf
        <div class="header">
            <h2 class="title">Setting</h2>
        </div>
        <div class="content" id="imageContainer">
            @foreach($slideshow as $ss)
                <div class="row" id="exist_{{$ss->id}}">
                    <input type="hidden" name="id[]" value="{{{old('text_1', isset($ss->id) ? $ss->id : '')}}}">
                    <div class="col-md-1">
                        @if(isset($ss->gambar))
                            <img src="/uploads/{{$ss->gambar}}" width="100%">
                        @endif
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="file" class="form-control" name="image[]"
                                value="{{{old('text_1', isset($ss->gambar) ? $ss->gambar : '')}}}">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="text" id="text1_1" class="form-control" name="text_1[]" required
                                value="{{{old('text_1', isset($ss->text_1) ? $ss->text_1 : '')}}}" placeholder="Text 1">
                        </div>
                    </div>
                    <div class="col-md">
                        <div class="form-group">
                            <input type="text" id="text1_1" class="form-control" name="text_2[]" required
                                value="{{{old('text_2', isset($ss->text_2) ? $ss->text_2 : '')}}}" placeholder="Text 2">
                        </div>
                    </div>
                    <div class="col-md-1">
                        <a class="btn btn-danger" onclick="remove({{$ss->id}})">-</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="row">
            <div class="col-md-4">
                <button type="button" class="btn btn-success" onclick="addImageField()">Tambah Gambar</button>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <button type="submit" class="btn btn-primary btn-fill">Simpan</button>
            </div>
        </div>
        <hr>
    </form>
    <!-- <form method="post" action="}" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="header">
            <h2 class="title">Sambutan</h2>
        </div>
        <div class="content">

        </div>
    </form> -->
</div>
<script>
    counter = 0;
    function addImageField() {
        // Get the container element for image fields
        var imageContainer = document.getElementById("imageContainer");

        var row = document.createElement("row");
        row.className = "row";
        row.id = "row_" + counter;
        counter++;
        // Create a new div element for the image field
        var colMd0 = document.createElement("div");
        colMd0.className = "col-md-1";
        var colMd = document.createElement("div");
        colMd.className = "col-md";
        var colMd2 = document.createElement("div");
        colMd2.className = "col-md";
        var colMd3 = document.createElement("div");
        colMd3.className = "col-md";
        var colMd4 = document.createElement("div");
        colMd4.className = "col-md-1";

        // Create an input element for the image name
        var formGroup = document.createElement("div");
        formGroup.className = "form-group";
        var formGroup2 = document.createElement("div");
        formGroup2.className = "form-group";
        var formGroup3 = document.createElement("div");
        formGroup3.className = "form-group";
        var input = document.createElement("input");
        input.type = "file";
        input.className = "form-control";
        input.placeholder = "Gambar";
        input.id = "image";
        input.required = true;
        input.name = "image[]";  // Use an array name to capture multiple activities

        var input2 = document.createElement("input");
        input2.type = "text";
        input2.className = "form-control";
        input2.placeholder = "Text 1";
        input2.id = "text_1";
        input2.required = true;
        input2.name = "text_1[]";  // Use an array name to capture multiple activities

        var input3 = document.createElement("input");
        input3.type = "text";
        input3.className = "form-control";
        input3.placeholder = "Text 2";
        input3.id = "text_2";
        input3.required = true;
        input3.name = "text_2[]";  // Use an array name to capture multiple activities

        var remove = document.createElement("button");
        remove.type = "button";
        remove.className = "btn btn-danger";
        remove.innerHTML = "-";
        remove.onclick = function () {
            imageContainer.removeChild(row);
        };
        // Add the label and input to the image field div
        formGroup.appendChild(input);
        formGroup2.appendChild(input2);
        formGroup3.appendChild(input3);

        colMd.appendChild(formGroup);
        colMd2.appendChild(formGroup2);
        colMd3.appendChild(formGroup3);
        colMd4.appendChild(remove);

        var inputId = document.createElement("input");
        inputId.type = "hidden";
        inputId.name = "id[]";

        // Add the image field div to the container
        row.appendChild(inputId);
        row.appendChild(colMd0);
        row.appendChild(colMd);
        row.appendChild(colMd2);
        row.appendChild(colMd3);
        row.appendChild(colMd4);

        imageContainer.appendChild(row);
    }
    function removeLastImageField() {
        var imageContainer = document.getElementById("imageContainer");
        if (imageContainer.children.length > 1) {
            imageContainer.removeChild(imageContainer.lastChild);
        }
    }
    function remove(id) {
        $.ajax({
            type: "DELETE",
            url: '/setting/' + id,
            processData: false,
            contentType: false,
            cache: false,
            beforeSend: function (xhr) {
                xhr.setRequestHeader('X-CSRF-TOKEN', "{{ csrf_token() }}");
            },
            success: function (data, status, xhr) {
                if (xhr.status == 200) {
                    document.getElementById("imageContainer").removeChild(document.getElementById("exist_" + id))
                }
            }, error: function () {
                alert("Could not send to database");
            }
        });
    }
</script>
@endsection