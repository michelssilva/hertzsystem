const bookForm = (function($){
    const BOOK_LESSON = $("#progress_lesson");
    const BOOK_DATE = $("#progress_datepicker");
    const BOOK_CONTENT = $("#progress_content");
    const BOOK_BOOK = $("#progress_book")
    const BOOK_UPDATE_BUTTON = $("#updateButton");

    function clear() {
        setData();
        BOOK_LESSON.focus();
    }


    function getData() {
        return {
            lesson: BOOK_LESSON.val(),
            date: BOOK_DATE.val(),
            content: BOOK_CONTENT.val(),
            book: BOOK_BOOK.val(),

        };
    }

    function setData(lesson='', date='', content='', book='') {
        BOOK_LESSON.val(lesson);
        BOOK_DATE.val(date);
        BOOK_CONTENT.val(content);
        BOOK_BOOK.val(book);
    }

    function setSubmitButtonText(str) {
        BOOK_UPDATE_BUTTON.text(str);
    }

    function getSubmitButtonText() {
        return BOOK_UPDATE_BUTTON.text();
    }

    return {
        clear: clear,
        hasErrors: hasErrors,
        getData: getData,
        setData: setData,
        setSubmitButtonText: setSubmitButtonText,
        getSubmitButtonText: getSubmitButtonText,
    };
})(jQuery);