// Próximo ID para adicionar um novo livro
let _nextId = 1;
// ID do livro que está sendo editado
let _activeId = 0;

const BOOK_FORM = $("#progress_form");
const BOOK_TABLE = $("#bookTable");

function handleBookEdit() {
    const row = $(this).parents("tr");
    const cols = row.children("td");

    _activeId = $($(cols[3]).children("button")[0]).data("id");

    bookForm.setData($(cols[0]).text(), $(cols[1]).text(), $(cols[2]).text());

    bookForm.setSubmitButtonText("Atualizar");
}

function handleBookDeleteClick() {
    $(this).parents("tr").remove();
}

function handleBookSubmission(e) {
    e.preventDefault();

    if (bookForm.hasErrors()) {
        return;
    }

    if (bookForm.getSubmitButtonText() === "Atualizar") {
        bookTable.updateInTable(_activeId);
        bookForm.setSubmitButtonText("Adicionar");
    } else {
        bookTable.addToTable(_activeId);
        _nextId += 1;
    }

    bookForm.clear();
}

BOOK_TABLE.on('click', '.book-edit', handleBookEdit);
BOOK_TABLE.on('click', '.book-delete', handleBookDeleteClick);
BOOK_FORM.on('submit', handleBookSubmission);