1. Cross-site scripting (XSS) is a vulnerability that enables hackers to inject client-side script into web pages. Explain the potential issue with using $_SERVER["PHP_SELF"] as the form action, and how to avoid that issue.
    Using the syntax above we allow for XSS script injection within the php link its self. Since this way of communcating data between pages
    simply uses the link to transfer data, a malicious hacker could easily write a script within that link, injecting the hack into the web page.
    We can avoid this vulnerability by using html special characters. This basically encrypts the link (changes the data to special characters) so XSS injection is no longer possible.

2. Explain why it's important to have server-side validation, and why you might want both client- and server-side.
    Server and client side validation are important to verify if a given input is valid. For example, if an email was entered in the correct format
    but the email didn't exist in our database, this would have to be done on the server side. This being said,
    a client side validation could catch a non valid email before the server had to use its resources to check
    if its in the database. Using client side validation can decrease the load on your server and server side validation
    can provide you with more secure and thorough forms of validation.
    Hence why client and server side validation are both important and play a vital role in the validation process
