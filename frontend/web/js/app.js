function toggleActivityModal(tag, idrecord) {
    console.log("tag=" + tag);
    $(tag).modal();

    $.ajax({
        url: '/crm-record/view?id=' + idrecord,
        cache: false,
//        dataType: 'json',
        type: 'POST',
//        data: data,
        error: function (xhr, ajaxOptions, thrownError) {
            alert("There was an error occurred");
        },
        success: function (response) {
            $(tag + " .ticket-header").html(response);
            $(tag + " input[name='CrmActivity[idcrm_record]']").val(idrecord);
        }
    });
}

function submitWorklog() {
    data = $("#worklog-form").serialize();

    $.ajax({
        url: '/crm-activity/save',
        cache: false,
        dataType: 'json',
        type: 'POST',
        data: data,
        error: function (xhr, ajaxOptions, thrownError) {
            alert("error");
        },
        success: function (response) {
            if (response.success) {
                location.reload;
            } else {
                alert("error");
            }
        }
    });
}