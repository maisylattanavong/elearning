$(document).ready(function () {
    0 < $("#elm1").length &&
        tinymce.init({
            selector: "textarea#elm1",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar:
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                {
                    title: "Red text",
                    inline: "span",
                    styles: { color: "#ff0000" },
                },
                {
                    title: "Red header",
                    block: "h1",
                    styles: { color: "#ff0000" },
                },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],

            content_style: "body { font-family: Noto Sans Lao; }",
        });
});

$(document).ready(function () {
    0 < $("#elm2").length &&
        tinymce.init({
            selector: "textarea#elm2",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar:
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                {
                    title: "Red text",
                    inline: "span",
                    styles: { color: "#ff0000" },
                },
                {
                    title: "Red header",
                    block: "h1",
                    styles: { color: "#ff0000" },
                },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],

            content_style: "body { font-family: Noto Sans Lao; }",
        });
});

$(document).ready(function () {
    0 < $("#elm3").length &&
        tinymce.init({
            selector: "textarea#elm3",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar:
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                {
                    title: "Red text",
                    inline: "span",
                    styles: { color: "#ff0000" },
                },
                {
                    title: "Red header",
                    block: "h1",
                    styles: { color: "#ff0000" },
                },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],

            // content_style: "body { font-family: Noto Sans Lao; }",
             content_style: "body { font-family: phetsarath ot; }",
        });
});


$(document).ready(function () {
    0 < $("#elm4").length &&
        tinymce.init({
            selector: "textarea#elm4",
            height: 300,
            plugins: [
                "advlist autolink link image lists charmap print preview hr anchor pagebreak spellchecker",
                "searchreplace wordcount visualblocks visualchars code fullscreen insertdatetime media nonbreaking",
                "save table contextmenu directionality emoticons template paste textcolor",
            ],
            toolbar:
                "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | l      ink image | print preview media fullpage | forecolor backcolor emoticons",
            style_formats: [
                { title: "Bold text", inline: "b" },
                {
                    title: "Red text",
                    inline: "span",
                    styles: { color: "#ff0000" },
                },
                {
                    title: "Red header",
                    block: "h1",
                    styles: { color: "#ff0000" },
                },
                { title: "Example 1", inline: "span", classes: "example1" },
                { title: "Example 2", inline: "span", classes: "example2" },
                { title: "Table styles" },
                { title: "Table row 1", selector: "tr", classes: "tablerow1" },
            ],

            content_style: "body { font-family: Noto Sans Lao; }",
        });
});
