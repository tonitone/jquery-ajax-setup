/**
 * assignGlobalAjaxEventsOnElements kümmert sich ganz alleine um Requests wenn folgende Bedingungen erfüllt sind:
 * es muss eins der folgenden Elemente/Tags sein:
 * - a
 * - form
 *
 * diese Elemente müssen zwei data-Attribute mit dem jeweiligen Muster haben:
 * - data-ajax-url="URL-zu-der-der-Request/gehen/soll/"
 * - data-ajax-update-element="#Dom-Element .das .aktualisiert-werden-soll"
 *
 */
var assignGlobalAjaxEventsOnElements = function () {

    var formTags = $('form[data-ajax-url]');
    if (formTags.length) {
        formTags.unbind('submit').submit(function (e) {
            e.preventDefault();
            var that = this;
            console.log('submit - Der .submit() Handler hat gegriffen.');
            $.ajax(
                {
                    url: $(that).data('ajax-url'),
                    data: $(that).serialize(),
                    updateElement: $($(that).data('ajax-update-element'))
                }
            );
        });
    }
    var aTags = $('a[data-ajax-url]');
    if (aTags.length) {
        aTags.unbind('click').click(function (e) {
            e.preventDefault();
            e.stopPropagation();
            var that = this;
            console.log('click - Der .click() Handler hat gegriffen.');
            $.ajax(
                {
                    url: $(that).data('ajax-url'),
                    updateElement: $($(that).data('ajax-update-element'))
                }
            );
        });
    }

    var successElement = $('.alert-success');
    if (successElement.length) {
        successElement.delay(3000).fadeOut(500);
    }
};