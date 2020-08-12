$("button").click(function(e){
    let fullName = $("#vardas").val();
    let email = $("#pastas").val();
    let msg = $("#zinute").val();

    $.post("/php/whereISendData.php",
        {
            name: fullName,
            email: email,
            message: msg
        },
        function(data, status){
            $('#rez').html(data);
        });
    e.preventDefault();
});