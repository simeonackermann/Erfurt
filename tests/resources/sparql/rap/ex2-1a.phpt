return array(
    'name'              => 'ask-02.rq',
    'group'             => 'RAP Ask Test Cases',
    'result_form'       => 'select',
    'query'             => 'SELECT  ?title
    WHERE
        { <http://example.org/book/book1> <http://purl.org/dc/elements/1.1/title> ?title }'
);
