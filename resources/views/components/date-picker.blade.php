<input
    x-data
    x-ref="input"
    x-init="new Pikaday({
        field: $refs.input,
        format: 'YYYY-MM-DD',
        firstDay: 1,
        toString(date, format) {
            // YYYY-MM-DD
            // const day = date.getDate();
            // const month = date.getMonth() + 1;
            // const year = date.getFullYear();
            // return `${year}-${month}-${day}`;=
            return new Intl.DateTimeFormat('en-ca').format(date);
        },
        parse(dateString, format) {
            // dateString is the result of `toString` method
            const parts = dateString.split('-');
            const day = parseInt(parts[2], 10);
            const month = parseInt(parts[1], 10) - 1;
            const year = parseInt(parts[0], 10);
            return new Date(year, month, day);
        },
        i18n: {
            previousMonth : 'Elöző Hónap',
            nextMonth     : 'Következő Hónap',
            months        : ['Január','Február','Március','Április','Május','Június','Július','Augusztus','Szeptember','Október','November','December'],
            weekdays      : ['Vasárnap','Hétfő','Kedd','Szerda','Csütörtök','Péntek','Szombat'],
            weekdaysShort : ['V','H','K','Sz','Cs','P','Szo']
        }
    })"
    type="text"
    class="form-control"
    {{ $attributes }}
>
