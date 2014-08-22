<form action="" enctype="multipart/form-data">
    name <input type="text" name="name" >
    <br>
    imgs <input type="file" name="ff[]" multiple="multiple">
    <br>
    <button type="submit">送出</button>
</form>

<script>
    var form = document.querySelector('form'),
        request = new XMLHttpRequest();

    form.addEventListener('submit', function(e){
        e.preventDefault();
        var formdata = new FormData(form);
        request.open('post', '/photo/upload');
        request.send(formdata);
    }, false);
</script>