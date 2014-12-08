/**
 * Created with JetBrains PhpStorm.
 * User: Toni.Ivanisevic
 * Date: 08.04.13
 * Time: 16:42
 * To change this template use File | Settings | File Templates.
 */

if (!console) {
    var console = {};
    console.log = function (a) {
    };
}

var jQueryAjaxSetup = {
    /* set jQuery - ajax-Properties or overwrite methods */
    cache: false,
    timeout: 10000,
    /*processData: false,*/
    /* wenn global: true werden die global ajaxEvents geladen, die den globaln ajas-loader anzeigen */
    global: true,

    /* jQuery Properties */
    showOverlayMask: false,
    ajaxErrorMessage: false,
    updateElement: false,
    ajaxErrorMessageText: '<h4 class="alert-heading">Ups! Da ist etwas schief gelaufen!</h4> Probiere es bitte noch einmal.',
    ajaxOverlay: false,
    ajaxOverlayId: 'ajax-overlay',
    ajaxGlobalLoadingMessage: false,
    ajaxGlobalLoadingMessageText: 'Daten werden geladen ...',
    ajaxGlobalLoadingMessageId: 'ajax-global-loading-message',

    /* jQuery Methods */

    beforeSend: function () {
        console.log('EVENT: beforeSend (local)');
    },
    complete: function () {
        console.log('EVENT: complete (local)');
    },

    success: function (data) {
        console.log('EVENT: success (local)');
        if (this.updateElement.length) {
            this.updateElement.html(data);
			if(this.global == true) {
				this.updateElement.effect( "highlight" );
			}
            assignGlobalAjaxEventsOnElements();
        }
    },

    showErrorMessage: function () {
        console.log('function: showErrorMessage');
        if (!jQueryAjaxSetup.ajaxErrorMessage.length) {
            jQueryAjaxSetup.ajaxErrorMessage = $('<div class="alert alert-danger ajax-global-error-message" />').
                html(jQueryAjaxSetup.ajaxErrorMessageText).prependTo('body')
        }
        jQueryAjaxSetup.ajaxErrorMessage.show().delay(3000).fadeOut(500);
    },

    buildOverlay: function () {
        console.log('function: buildOverlay');
        if (jQueryAjaxSetup.showOverlayMask && !jQueryAjaxSetup.ajaxOverlay.length) {
            jQueryAjaxSetup.ajaxOverlay = $('<div class="' + this.ajaxOverlayId + '" />').appendTo('body').hide();
        }
        if (!jQueryAjaxSetup.ajaxGlobalLoadingMessage.length) {
            jQueryAjaxSetup.ajaxGlobalLoadingMessage =
                $('<p class="alert alert-info ' + this.ajaxGlobalLoadingMessageId + '" />').html(this.ajaxGlobalLoadingMessageText).appendTo('body').hide();
        }
    },

    showLoadingProgress: function () {
        console.log('function: showLoadingProgress');
        jQueryAjaxSetup.buildOverlay();
        if (jQueryAjaxSetup.showOverlayMask) {
            jQueryAjaxSetup.ajaxOverlay.show();
        }
        if (jQueryAjaxSetup.ajaxGlobalLoadingMessage.length) {
            jQueryAjaxSetup.ajaxGlobalLoadingMessage.show();
        }
    },

    hideLoadingProgress: function () {
        console.log('function: hideLoadingProgress');
        if (jQueryAjaxSetup.showOverlayMask) {
            jQueryAjaxSetup.ajaxOverlay.hide();
        }
        if (jQueryAjaxSetup.ajaxGlobalLoadingMessage.length) {
            jQueryAjaxSetup.ajaxGlobalLoadingMessage.hide();
        }
    }
};

$.ajaxSetup(jQueryAjaxSetup);

$(document).bind(
    {
        ready: function () {
            assignGlobalAjaxEventsOnElements()
        },
        ajaxSend: function () {
            console.log('EVENT: ajaxSend (global)');
            jQueryAjaxSetup.showLoadingProgress();
        },
        ajaxError: function () {
            console.log('EVENT: ajaxError (global)');
            jQueryAjaxSetup.showErrorMessage();
        },
        ajaxComplete: function () {
            console.log('EVENT: ajaxComplete (global)');
            jQueryAjaxSetup.hideLoadingProgress();
        }
    }
);
