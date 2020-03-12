(function () {
    var Page = {

        table: null,

        init: function () {
            Page.datatable.init();
            Page.datatable.restoreFilters();
            Page.registerHandlers();
        },

        registerHandlers: function () {
            //datatable
            $(".dataTable thead input").on('keyup', Page.datatable.filter);
            $('#table-paziente-index tbody').on('click', 'tr', Page.datatable.openView);
        },

        datatable: {
            init: function () {
                //add text inputs in header raw and bind events
                $('#table-paziente-index thead tr#filterrow th').each(function () {
                    var title = $('#table-paziente-index thead th').eq($(this).index()).text();
                    if (title === 'Paziente' ||
                            title === 'C. Fiscale' ||
                            title === 'Comune Residenza'
                            ) {
                        $(this).html('<input type="text" placeholder="" />');
                    }
                });
                $.ajaxSetup({cache: false});

                //instantiate table
                Page.table = $('#table-paziente-index').DataTable({
                    ajax: {
                        url: '?r=paziente/index-data',
                        type: 'GET',
                        dataSrc: '',
                        data: {},
                        dataType: 'json',
                        headers: {
                            'Cache-Control': 'max-age=1000'
                        },
                        cache: true
                    },
                    processing: true,
                    stateSave: true, stateDuration: 0,
                    dom: 'pitlfr',
                    orderCellsTop: true,
                    scrollY: '65vh',
                    scrollCollapse: true,
                    scrollX: true,
                    paging: true,
                    pageLength: 100,
                    columns: [
                        {data: null},
                        {data: 'paziente'},
                        {data: 'codice_fiscale'},
                        {data: 'comune'},
                        {data: 'provincia'},
                        {data: 'telefono'},
                        {data: 'medico'},
                        {data: 'email'}

                    ],
                    columnDefs: [
                        {
                            searchable: false,
                            orderable: false,
                            className: "index-column ",
                            targets: 0
                        }
                        , {
                            className: 'text-center',
                            targets:[4]

                        }

                    ],
                    order: [],
                    language: {
                        "sEmptyTable": "Nessun dato presente nella tabella",
                        "sInfo": "Vista _START_-_END_ di _TOTAL_ elementi",
                        "sInfoEmpty": "Vista di 0 elementi",
                        "sInfoFiltered": "(filtrati da _MAX_ totali)",
                        "sInfoPostFix": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "Pagina _MENU_ elementi",
                        "sLoadingRecords": "Caricamento in corso ...",
                        "sProcessing": '<img src="../web/img/loader/ajax-loader-blu.gif">',
                        "sSearch": "Cerca:",
                        "sZeroRecords": "La ricerca non ha portato alcun risultato.",
                        "oPaginate": {
                            "sFirst": "Inizio",
                            "sPrevious": "Precedente",
                            "sNext": "Successivo",
                            "sLast": "Fine"
                        },
                        "oAria": {
                            "sSortAscending": ": attiva per ordinare la colonna in ordine crescente",
                            "sSortDescending": ": attiva per ordinare la colonna in ordine decrescente"
                        }
                    }
                });
                //index column - create
                Page.table.on('order.dt search.dt', function () {
                    Page.table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                        cell.innerHTML = i + 1;
                    });
                }).draw();

            },

            openView: function () {
                var data = Page.table.row(this).data();
                if (event.ctrlKey || event.metaKey) {
                    window.open('?r=paziente/view&id=' + data.id, '_blank');
                } else {
                    location.href = '?r=paziente/view&id=' + data.id;
                }
            },

            filter: function () {
                Page.table
                        .column($(this).parent().index() + ':visible')
                        .search(this.value)
                        .draw();
            },

            restoreFilters: function () {
                //number of columns before filter row first input
                var filterRowOffset = 1;

                var state = Page.table.state.loaded();
                if (state) {

                    //check each column is saved state
                    Page.table.columns().eq(0).each(function (colIdx) {
                        var colSearch = state.columns[colIdx].search;

                        //if there is search content
                        if (colSearch.search) {

                            //count precedent invisible columns inside the filter row
                            let offset = 0;
                            for (let i = 0; i < colIdx; i++) {
                                if (!state.columns[i].visible && i >= filterRowOffset) {
                                    offset++;
                                }
                            }

                            //restore only if column is visible, consider offset when updating content
                            if (state.columns[colIdx].visible) {
                                $('#filterrow th input').eq(colIdx - offset - filterRowOffset).val(colSearch.search);
                            }
                        }
                    });
                }
            }



        }


    };
    //wait for the DOM to finish ... DataTables won't work ...
    $(document).ready(function () {
        Page.init();
    });
})();

