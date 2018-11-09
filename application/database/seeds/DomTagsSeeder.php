<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DomTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dom_tags')->insert(
        [
            [
                'tag'=>'a',
                'description'=>'Defines a hyperlink',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'abbr',
                'description'=>'Defines an abbreviation or an acronym',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'address',
                'description'=>'Defines contact information for the author/owner of a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'area',
                'description'=>'Defines an area inside an image-map',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'article',
                'description'=>'Defines an article',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'aside',
                'description'=>'Defines content aside from the page content',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'audio',
                'description'=>'Defines sound content',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'b',
                'description'=>'Defines bold text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'base',
                'description'=>'Specifies the base URL/target for all relative URLs in a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'bdi',
                'description'=>'Isolates a part of text that might be formatted in a different direction from other text outside it',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'bdo',
                'description'=>'Overrides the current text direction',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'blockquote',
                'description'=>'Defines a section that is quoted from another source',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'body',
                'description'=>'Defines the documents body',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'br',
                'description'=>'Defines a single line break',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'button',
                'description'=>'Defines a clickable button',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'canvas',
                'description'=>'Used to draw graphics, on the fly, via scripting (usually JavaScript)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'caption',
                'description'=>'Defines a table caption',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'cite',
                'description'=>'Defines the title of a work',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'code',
                'description'=>'Defines a piece of computer code',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'col',
                'description'=>'Specifies column properties for each column within a <colgroup> element ',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'colgroup',
                'description'=>'Specifies a group of one or more columns in a table for formatting',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'data',
                'description'=>'Links the given content with a machine-readable translation',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'datalist',
                'description'=>'Specifies a list of pre-defined options for input controls',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'dd',
                'description'=>'Defines a description/value of a term in a description list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'del',
                'description'=>'Defines text that has been deleted from a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'details',
                'description'=>'Defines additional details that the user can view or hide',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'dfn',
                'description'=>'Represents the defining instance of a term',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'dialog',
                'description'=>'Defines a dialog box or window',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'div',
                'description'=>'Defines a section in a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'dl',
                'description'=>'Defines a description list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'dt',
                'description'=>'Defines a term/name in a description list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'em',
                'description'=>'Defines emphasized text ',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'embed',
                'description'=>'Defines a container for an external (non-HTML) application',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'fieldset',
                'description'=>'Groups related elements in a form',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'figcaption',
                'description'=>'Defines a caption for a <figure> element',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'figure',
                'description'=>'Specifies self-contained content',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'footer',
                'description'=>'Defines a footer for a document or section',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'form',
                'description'=>'Defines an HTML form for user input',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'h1> to <h6',
                'description'=>'Defines HTML headings',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'head',
                'description'=>'Defines information about the document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'header',
                'description'=>'Defines a header for a document or section',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'hr',
                'description'=>'Defines a thematic change in the content',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'html',
                'description'=>'Defines the root of an HTML document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'i',
                'description'=>'Defines a part of text in an alternate voice or mood',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'iframe',
                'description'=>'Defines an inline frame',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'img',
                'description'=>'Defines an image',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'input',
                'description'=>'Defines an input control',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'ins',
                'description'=>'Defines a text that has been inserted into a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'kbd',
                'description'=>'Defines keyboard input',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'label',
                'description'=>'Defines a label for an <input> element',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'legend',
                'description'=>'Defines a caption for a <fieldset> element',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'li',
                'description'=>'Defines a list item',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'link',
                'description'=>'Defines the relationship between a document and an external resource (most used to link to style sheets)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'main',
                'description'=>'Specifies the main content of a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'map',
                'description'=>'Defines a client-side image-map',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'mark',
                'description'=>'Defines marked/highlighted text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'meta',
                'description'=>'Defines metadata about an HTML document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'meter',
                'description'=>'Defines a scalar measurement within a known range (a gauge)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'nav',
                'description'=>'Defines navigation links',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'noscript',
                'description'=>'Defines an alternate content for users that do not support client-side scripts',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'object',
                'description'=>'Defines an embedded object',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'ol',
                'description'=>'Defines an ordered list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'optgroup',
                'description'=>'Defines a group of related options in a drop-down list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'option',
                'description'=>'Defines an option in a drop-down list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'output',
                'description'=>'Defines the result of a calculation',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'p',
                'description'=>'Defines a paragraph',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'param',
                'description'=>'Defines a parameter for an object',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'picture',
                'description'=>'Defines a container for multiple image resources',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'pre',
                'description'=>'Defines preformatted text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'progress',
                'description'=>'Represents the progress of a task',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'q',
                'description'=>'Defines a short quotation',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'rp',
                'description'=>'Defines what to show in browsers that do not support ruby annotations',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'rt',
                'description'=>'Defines an explanation/pronunciation of characters (for East Asian typography)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'ruby',
                'description'=>'Defines a ruby annotation (for East Asian typography)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'s',
                'description'=>'Defines text that is no longer correct',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'samp',
                'description'=>'Defines sample output from a computer program',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'script',
                'description'=>'Defines a client-side script',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'section',
                'description'=>'Defines a section in a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'select',
                'description'=>'Defines a drop-down list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'small',
                'description'=>'Defines smaller text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'source',
                'description'=>'Defines multiple media resources for media elements (<video> and <audio>)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'span',
                'description'=>'Defines a section in a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'strong',
                'description'=>'Defines important text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'style',
                'description'=>'Defines style information for a document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'sub',
                'description'=>'Defines subscripted text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'summary',
                'description'=>'Defines a visible heading for a <details> element',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'sup',
                'description'=>'Defines superscripted text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'svg',
                'description'=>'Defines a container for SVG graphics',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'table',
                'description'=>'Defines a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'tbody',
                'description'=>'Groups the body content in a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'td',
                'description'=>'Defines a cell in a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'template',
                'description'=>'Defines a template',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'textarea',
                'description'=>'Defines a multiline input control (text area)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'tfoot',
                'description'=>'Groups the footer content in a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'th',
                'description'=>'Defines a header cell in a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'thead',
                'description'=>'Groups the header content in a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'time',
                'description'=>'Defines a date/time',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'title',
                'description'=>'Defines a title for the document',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'tr',
                'description'=>'Defines a row in a table',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'track',
                'description'=>'Defines text tracks for media elements (<video> and <audio>)',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'u',
                'description'=>'Defines text that should be stylistically different from normal text',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'ul',
                'description'=>'Defines an unordered list',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'var',
                'description'=>'Defines a variable',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'video',
                'description'=>'Defines a video or movie',
                'active'=>'1', 'created_at'=>Carbon::now()
                ],
                
                [
                'tag'=>'wbr',
                'description'=>'Defines a possible line-break',
                'active'=>'1', 'created_at'=>Carbon::now()
                ]
            ]
                
                );
    }
}
