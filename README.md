jquery-ajax-setup
=================
Dieses Demo zeigt, wie mächtig die $.ajaxSetup Methode ist und wie man mit ein paar Handgriffen, eine bestehende Seite in eine kleine SPA umbauen kann.

Die Funktion assignGlobalAjaxEventsOnElements kümmert sich autonom um die Ajax-Requests, wenn ein `data-ajax-url`-Attribut mit  einem `data-ajax-update-element`-Attribute in einem `a`-Tag oder einem `Form`-Tag enthalten ist.

Beispiele
```html
Links:
<a href="javascript:;" data-ajax-url="inc/form2.php" data-ajax-update-element=".form-replace-container2">EDIT-MODUS</a>
Formulare:
<form method="post" action="form2.php" data-ajax-url="inc/form2.php" data-ajax-update-element=".form-replace-container2">
```
