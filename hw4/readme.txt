    Jensen Eicher
    CSCI 445 SEC A
    HTML Basics
    9/18/20

Questions:

1. What styling is used to make the links display horizontally (i.e., on larger screens)
    The links are displayed horizontally because of the styling in the nav.css file. This is accomplished
    by using the float: left; line in .navbar a. This allows the elements to slide next to eachother
    from left to right.

2. What part of the code (in the HTML file) actually causes the hamburger icon to appear? Be specific.
    The code in nav.css on line 35 is triggered when the screen is less than 600 pixels wide. This is when the hamburger icon
    appears and the rest of the menu items are hidden.

3. How does this code use CSS pseudo-classes to display only home and the hamburger when the screen size is small?
    This code uses many pseudo-classes but the specific pseudo-classes used to display only the home page and hamburger menu
    when the screen is small is "first-child." This allows the program to select only the homepage to display along side the hamburger menu.