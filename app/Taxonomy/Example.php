<?php

namespace MyTheme\Taxonomy;

use MyTheme\Taxonomy\CustomTaxonomy;

class Example extends CustomTaxonomy
{
    protected static $taxonomyName = 'example_taxonomy';

    protected static $singularName = 'Example Taxonomy';

    protected static $pluralName = 'Example Taxonomies';

    protected static $objectType = array(
        'example'
    );
}
