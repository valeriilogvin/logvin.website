$(document).ready(function()
{
    $('.header__button').click(function ()//Show popup
    {
        $('.fixed-overlay')  .fadeIn();
    });

    $('.close-btn').click(function ()//Hide popup
    {
        $('.fixed-overlay')  .fadeOut();
    });

});

$(document).ready(function ()
{
	$("form").submit(function ()
	{
		var formID    = $(this).attr('id');// Получение ID формы

		var formNm    = $('#' + formID);// Добавление решётки к имени ID

		var formTitle = $(formNm).find(".formTitle");// Ищет класс .formtitle в текущей форме и записываем в переменную

        $.ajax({
			type: "POST",
			url: '../mail.php',
			data: formNm.serialize(),
			success:

                function showMessage() {
                    $('.fixed-overlay').hide();//Hide popup

                }
		});
		return false;
	});

});