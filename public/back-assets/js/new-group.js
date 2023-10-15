$(document).ready(function (){
    var course_result = [];

    $.ajax({
        url: "/admin/get/courses",
        type: "get",
        datatype: "json",
        success: function(result){
            course_result = result;
            fetch_courses_list(course_result);
        },
        error: function(){
            console.log("Couldn't fetch data");
        }
    });



    function fetch_courses_list(result){
        var sel= document.createElement("select");
        sel.classList.add("form-select");
        sel.classList.add("mt-2");
        sel.classList.add("mb-3");
        sel.classList.add("course_list");
        for (var c = 0; c < result.length; c++){
            var item = document.createElement("option");
            item.setAttribute("value", result[c]["id"]);
            item.innerText = result[c]["name"];
            sel.appendChild(item);
        }
        document.querySelector("#courses_list").appendChild(sel);
    }

    $("#add_course").click(function (){
        fetch_courses_list(course_result);
    });

    $("#remove_course").click(function(){
        $(".course_list:last-child").remove();
    });



});
