# WORK IN PROGRESS

![image](https://i.pinimg.com/originals/ba/61/88/ba6188fd7b5f5f3b560fbad5064c7a66.gif)
Scetch so far





# HIME HINA MUSIC

[Fun website](https://eggie.love/himehina/index.php) to check up on the albums and how many days it is left to the next release. 

# Installation

Add the installation instructions.

1. Download
2. PHP -S localhost:8000 from the repo

# Code Review

Code review written by [Patrik Staaf](https://github.com/patrikstaaf).

1. `index.php` - There are two index.php files, one in root and another in your project folder.
2. `album_footer.html` - album_footer.html is included in album.php but not in index.php (closing tags instead).
3. `album_header.html` - album_header is never included, rather duplication of code.
4. `style.css` - Did you consider adding a styles folder for your css files?
5. `function.php 17` - Missing return declaration.
6. `index.php 22` - Both “Hime” and “Hina” collapses and blends in mobile view (or is that intended?)
7. `album.php 28` - Remember to add alt text on your images, especially this one since it serves as a heading.
8. `index.php 97` - Script after closing body tag.
9. `data.php 22` - Some images could be optimized for better load time.
10. `album.php 46` -  Consider using endforeach instead of {} for readibility.

With that said, I think your design is badass. Keep doing different stuff that looks cool, as it’s memorable and not generic/dull. 

<img src="https://media2.giphy.com/media/lPcmrZjScHB5bQv2tA/giphy.gif?cid=ecf05e47s6ns97iz2s1arll26wy4r74ppmlzeo2o3bxxij2m&rid=giphy.gif&ct=g">


# Testers

Tested by the following people:

1. Jane Doe
2. John Doe
