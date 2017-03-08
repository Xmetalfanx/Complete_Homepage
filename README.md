# Introduction

I plan to give a little bit of a history of how my site came to be, here

I am just typing this ASAP, so please excuse the grammar for now

# Macromedia Dreamweaver Templates

Dreamweaver and it's templates and nested-template system to allow me to change the content though have the same header, footer, left-hand menus (this is where the submenus come in)

I liked some of the checks (does X work on browsers F00 and/or BAR ... and what versions of FOO and/or BAR DOES it work on) ...... are there (thoughout the site) any dead links?... if its the same deadlink ... "do you want me ...(Dreamweaver) to correct all of those links to point to the new location of the file you specified?"

# Sick of Windows

Dreamweaver though not cheap was never really the issue for me ... it was/is Microsoft Windows and hitting my limits with the issues

I wanted to be able to roughly have a template system but not be tied to any Operating System or program in particular.

# PHP Templates / SASS-SCSS

## PHP Templates - Version 1.0

I have no clue where I found the tutorials for PHP templates and the way I had it setup at this point .. but basically it wasn't done very well ... it worked though it limited me to a version of PHP 5.5 or lower ... that's not good .... THOUGH i DO HAVE A SOLUTION for that.

I also have sub-templates in a sense.

Bascially there are .php files with snippets of code that I call from other files ... instead of having say each page of the site with a header ... THEN if I add or remove a menu, I have to do it on TONS AND TONS of pages ... I have one "Header.php" and I change that to make any adjustments and each "page" calls that "header.php".

The only reason, that I put "version 1.0" here you will see later on.

## [SASS/SCSS](http://sass-lang.com/) for CSS Styleshets

Without going into SASS too much, this allows me to create and edit SCSS files in place of the CSS files and combine different rules and use different SASS features to slim what I am doing down, and add some cool things like browser pre-fixes when the SCSS file is compiled. I am trying to keep this simple, but there are TONS of advantages to SASS, such as nesting rules for better readability/organization, and IIRC (I am so use to it now, I forgot what CSS was like on it's own) variables for various tasks.

Mixins were another key part of why I loved SASS right away ... basically (no a great way to say this I bet) a way to call a sort of block of CSS code ... I write one line (even with the ability to pass arguments ...aka different values) of SASS/SCSS and the output CSS would have that block of CSS that I called ... when I am doing the same calls over and over .. this makes thing simpler on my end and also slims (SCSS wise) down the code.

# [Compass](http://sass-lang.com/)

Compass ... to keep this really short allowed me to use PREDONE Mixins and even take advantage of their browser prefixing. I am keeping this short and vague so I don't start rambling on and on, but basically Compass is a way to use predone mixins WITH SASS. I already wrote the ones I wanted (Border Radius and stuff like that ... nothing too fancy) though with Compass added .. those were already done for me.

It reminds me of some Linux Distros to be honest... I know how to set some distros up "from scratch" (NOT "Linux From Scratch")... ones that are basically "ready to go" out of the box are ... just nice to use .

**March 2017** - [Recently discovered that Compass is no longer going to be developed](https://github.com/Compass/compass)

## Feb/March 2017 - Where I am I now.

### PHP Templates - Version 2.0

I am redoing the templates the way they SHOULD have been done in the first place and this allows me to upgrade the backend to the latest version of PHP 7 and have everything work as expected

### Writing things in JADE first.

[Jade/Pug](https://pugjs.org/api/getting-started.html) Pug is the new "rebrand" of jade by the way. Same thing in a sense but going forward it's "pug".

Nothing much to say but I learned about it here: [Do you Even Jade, Bro?](https://www.youtube.com/watch?v=wzAWI9h3q18&t=185s)

I KNOW there are Markdown to HTML converters/addons/whatever ... but the best way I can describe Jade is sort of like this

- Markdown ~> "regular" Word Processing

- Jade/Pug ~~> "HTML" ```

Again it's more than that but I don't want to ramble on, boring people.

### Removing Compass

I am removing/redoing Compass items as it is no longer actively developed. I ran into a few issues with it not compiling correctly and that's when I discovered this.

## This is where I am at when I am typing this, to be fair

### Discovering [Bourbon](http://bourbon.io/) ,[Neat](http://neat.bourbon.io/), [Bitters](http://bitters.bourbon.io/), and [Refills](http://refills.bourbon.io/)

### Bootstrap 4 Framework

Changing things to [Bootstrap 4](https://v4-alpha.getbootstrap.com/) (I know, still Alpha) .... really no reason that I didn't pick [Bootstrap 3](http://getbootstrap.com/) or [Foundation](https://foundation.zurb.com/)....I just sort of picked Bootstrap 4\.

I do plan on possibly even make a mock site or a redo of my site in a different local folder using Foundation just to learn about it and how it works and possibly change my main site to Foundation, if down the road I feel its better than Bootstrap for my needs. With Jade/Pug that shouldn't be too difficult to do at all.
