$(document).ready(function () {


    $("body").on("click", ".edit-item", function () {
        let id = $(this).attr("data-id")
        let name = $(this).parent().parent().prev("td").prev("td").text()
        let year = $(this).parent().parent().prev("td").text()

        $("#edit-item").find("input[name='id']").val(id);
        $("#edit-item").find("input[name='name']").val(name);
        $("#edit-item").find("input[name='year']").val(year);
    })


    $(".edit-submit").on('click', function (e) {
        e.preventDefault()
        let id = $("#edit-item").find("input[name='id']").val()
        let name = $("#edit-item").find("input[name='name']").val()
        let year = $("#edit-item").find("input[name='year']").val()
        let isValid = true

        if (name.length < 5 || name.length > 40) {
            $(".err-name").text("Please input valid name with length in range 5-40")
            isValid = false
        }
        if (year < 1990 || year > 2015) {
            $(".err-year").text("Please input valid year in range 1990-2015")
            isValid = false
        }
        if (isValid) {
            $.ajax({
                dataType: "json",
                type: "POST",
                url: 'api/edit.php',
                data: {
                    id: id,
                    name: name,
                    year: year
                },
            }).done(function (data) {
                $("#edit-item").find("input[name='id']").val('');
                $("#edit-item").find("input[name='name']").val('');
                $("#edit-item").find("input[name='year']").val('');
                $(".err-name").text('')
                $(".err-year").text('')
                getData();
                $(".modal").modal('hide')
            })
        }
    })


    $(".create-submit").on("click", function (e) {
        e.preventDefault()
        let id = $("#create-item").find("input[name='id']").val()
        let name = $("#create-item").find("input[name='name']").val()
        let year = $("#create-item").find("input[name='year']").val()
        let isValid = true
        if (name.length < 5 || name.length > 40) {
            $(".err-name").text("Please input valid name with length in range 5-40")
            isValid = false
        }

        if (year < 1990 || year > 2015) {
            $(".err-year").text("Please input valid year in range 1990-2015")
            isValid = false
        }
        // console.log(id,name,year)
        if (isValid) {
            $.ajax({
                dataType: "json",
                type: "POST",
                url: 'api/create.php',
                data: {
                    id: id,
                    name: name,
                    year: year
                },
            }).done(function () {
                $("#create-item").find("input[name='id']").val('');
                $("#create-item").find("input[name='name']").val('');
                $("#create-item").find("input[name='year']").val('');
                $(".err-name").text('')
                $(".err-year").text('')
                getData();
                $(".modal").modal('hide')
            })
        }
    })


    $("body").on("click", ".remove-item", function (event) {
        if (confirm("Are you sure you want to remove it?")) {
            let id = $(this).attr("data-id");
            let parent = $(this).parent().parent().parent()
            $.ajax({
                dataType: "json",
                type: 'POST',
                url: 'api/delete.php',
                data: {
                    id: id
                }
            }).done(function () {
                parent.remove()
                getData()
            })
        }
    })


    const getData = () => {
        // console.log('a')
        $.ajax({
            type: 'POST',
            url: 'api/getData.php',
            dataType: 'json',
        }).done(function (data) {
            printRow(data.data)
        })
    }
    const printRow = (data) => {
        let rows = ``;
        // console.log(data.length)
        // if(data.length === 0) {
        //     $("tbody").html('')
        //     return
        // }
        data.map((row) => {
            rows += `<tr>`
            rows += `<td>${row['id']}</td>`
            rows += `<td>${row['name']}</td>`
            rows += `<td>${row['year']}</td>`
            rows += `<td>`
            rows += `<div class="center">`
            rows += `<button class="btn btn-warning btn-sm edit-item" data-toggle="modal" data-target="#edit-item" data-id=${row['id']}>Edit</button>`
            rows += `<button class="btn btn-danger btn-sm remove-item" data-id=${row['id']}>Delete</button>`
            rows += `</div>`
            rows += `</td>`
            rows += `</tr>`
        })
        $("tbody").html('')
        $("tbody").html(rows)
    }


    getData()


})