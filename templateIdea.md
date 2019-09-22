# New Idea for Templates

- The sections like Software and Browser (I think) in TechHQ that USE JSON ..have everything opened and closed in the template file itself ...

- the sectons that DO NOT use JSON, should have a call (techHQ side in this EXAMPLE) like the following in each page which closes the col2 (right) column, and the row too

```
  <!-- include baseTechFooter -->
    <?php include($path . '/modules/tech/baseTechFooter.tpl'); ?>
```
