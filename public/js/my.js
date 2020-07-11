$(document).ready(function () {
    $('#search-code').on('keyup', function () {
        let keyword = $(this).val();
        if (keyword) {
            let location = window.location.origin;
            $('#ul-code').html('');
            $.ajax({
                url: location + '/employees/search',
                method: 'GET',
                type: 'json',
                data: {
                    search: keyword
                },
                success: function (result) {
                    let html = '';
                    $.each(result, function (index, item) {
                        html += '<li class="list-group-item list-group-item-action code-employee" data-id="' + item.id + '">';
                        html += item.fullName + '-' + item.idCode;
                        html += '</li>';
                    });
                    $('#ul-code').append(html);
                },
                error: function (error) {
                }
            });
        } else {
            $('#ul-code').html('');
        }
    });

    // $('body').on('click', '.code-employee', function () {
    //
    //     let idCustomer = $(this).attr('data-id');
    //     let location = window.location.origin;
    //     $.ajax({
    //         url: location + '/employees/' + idCustomer + '/edit',
    //         type: 'GET',
    //         success: function (result) {
    //             console.log(result)
    //             $('#code').val(result.idCode);
    //             $('#group').val(result.staffGroup);
    //             $('#name').val(result.fullName);
    //             $('#date').val(result.birthday);
    //             $('#phone').val(result.phone);
    //             $('#card').val(result.idCard);
    //             $('#email').val(result.email);
    //             $('#address').val(result.address);
    //             $('#ul-code').html('');
    //         }
    //     });
    // });
});
