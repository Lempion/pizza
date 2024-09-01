$(document).ready(function () {
    let routeGetTable = $('.routeGetTable').val();

    //START Создание размеров продукта если выбрана любая категория, кроме Комбо
    let trActiveClone;
    let elemP = '<div class="elem-p text-xl font-normal w-full"></div>'

    $(document).on('click', '.add-size-product', function () {
        let activeElem = $('.tr-active').length;

        if (activeElem) {
            alert('Elem add active');
            return;
        }

        let uniqId = generateUniqueId();

        let newTr = $(trActiveClone).clone();

        newTr.attr('data-current-tr', uniqId).find('.active-button').each(function () {
            $(this).attr('data-tr', uniqId);
        });

        $('.size-product-tbody').append(newTr);
    }).on('click', '.save-size', function () {
        removeAllInputInvalid()
        let error = false;

        let currentTr = $('tr[data-current-tr="' + $(this).data('tr') + '"]')[0];

        let sizeChecked = $(currentTr).find('#size');
        let sizeCheckedElem = sizeChecked.find(':checked');
        let sizeCheckedVal = sizeChecked.val();

        if (sizeCheckedVal === null) {
            sizeChecked.addClass('input-invalid');
            error = true;
        }

        let price = $(currentTr).find('#price');
        let priceVal = price.val();

        if (priceVal.length === 0 || priceVal == 0 || priceVal.charAt(0) == 0) {
            $(price).addClass('input-invalid');
            error = true;
        }

        let gram = $(currentTr).find('#gram');
        let gramVal = gram.val();

        if (gramVal.length === 0 || gramVal == 0 || gramVal.charAt(0) == 0) {
            $(gram).addClass('input-invalid');
            error = true;
        }

        if (error) {
            alert('Change errors');
            return;
        }

        let defaultProduct = $(currentTr).find('#default-product');

        if ($('.size-product-tbody tr').length == 1) {
            defaultProduct.prop('checked', true);
        }

        defaultProduct.removeClass('hidden');

        $(currentTr).find('.elem-p').remove();

        sizeChecked.after($(elemP).text(sizeCheckedElem.text()).addClass('size-checked-p')).attr('data-old-value', sizeCheckedVal);
        price.after($(elemP).text(priceVal).addClass('price-p')).attr('data-old-value', priceVal);
        gram.after($(elemP).text(gramVal).addClass('gram-p')).attr('data-old-value', gramVal);

        sizeChecked.addClass('hidden');
        price.addClass('hidden');
        gram.addClass('hidden');

        $(currentTr).find('.active-create').addClass('hidden');
        $(currentTr).find('.active-change').removeClass('hidden');

        $(currentTr).removeClass('tr-active').addClass('tr-created');

    }).on('click', '.edit-size', function () {
        let activeElem = $('.tr-active').length;

        if (activeElem) {
            alert('End current active');
            return
        }

        let currentTr = $('tr[data-current-tr="' + $(this).data('tr') + '"]')[0];

        $(currentTr).find('.active-create').removeClass('hidden');
        $(currentTr).find('.active-change').addClass('hidden');

        let sizeChecked = $(currentTr).find('#size');
        let price = $(currentTr).find('#price');
        let gram = $(currentTr).find('#gram');

        sizeChecked.removeClass('hidden');
        price.removeClass('hidden');
        gram.removeClass('hidden');

        $(currentTr).find('.elem-p').addClass('hidden');
        $(currentTr).find('#default-product').addClass('hidden');

        $(currentTr).addClass('tr-active')
    }).on('click', '.cancel-size', function () {
        removeAllInputInvalid();
        let currentTr = $('tr[data-current-tr="' + $(this).data('tr') + '"]')[0];

        if ($('.size-product-tbody tr').length == 1 && !$(currentTr).hasClass('tr-created')) {
            alert('Lonely elem');
            return;
        } else if (!$(currentTr).hasClass('tr-created')) {
            $(currentTr).remove();
            return;
        }

        let sizeChecked = $(currentTr).find('#size');
        let price = $(currentTr).find('#price');
        let gram = $(currentTr).find('#gram');

        price.val(price.attr('data-old-value')).addClass('hidden');
        gram.val(gram.attr('data-old-value')).addClass('hidden');
        sizeChecked.val(sizeChecked.attr('data-old-value')).addClass('hidden');

        $(currentTr).find('.elem-p').removeClass('hidden');
        $(currentTr).find('#default-product').removeClass('hidden');

        $(currentTr).find('.active-create').addClass('hidden');
        $(currentTr).find('.active-change').removeClass('hidden');

        $(currentTr).removeClass('tr-active').addClass('tr-created');
    }).on('click', '.remove-size', function () {
        let activeElem = $('.tr-active').length;

        if ($('.size-product-tbody tr').length == 1) {
            alert('Lonely elem');
            return
        }

        if (activeElem) {
            alert('End current active');
            return
        }

        let currentTr = $('tr[data-current-tr="' + $(this).data('tr') + '"]')[0];

        if ($(currentTr).find('.default-product').prop('checked')) {
            alert('Can`t remove Default elem');
            return
        }
        $(currentTr).remove();
    }).on('change', '.selector-size', function () {
        let numberElementsWithThisValue = $('option[value="' + $(this).val() + '"]:selected').length;

        if (numberElementsWithThisValue > 1) {
            alert('This size exists');
            $(this).val('not-choose');
        }
    }).on('click', '.default-product', function () {
        $('.default-product').prop('checked', false);
        $(this).prop('checked', true);
        //END Создание размеров продукта если выбрана любая категория, кроме Комбо
    }).on('click', 'input,select,textarea', function () {
        $(this).removeClass('input-invalid');
    }).on('change', '.selector-category', function () {
        let tableWrapper = $('.table-wrapper');
        tableWrapper.empty();

        let category = $(this).val();
        let currentUrl = routeGetTable + category

        console.log(currentUrl)

        $.ajax({
            url: currentUrl,
            method: 'GET',
            success(answer) {
                tableWrapper.append(answer);
                trActiveClone = $('.tr-active').clone();
            },
            error(errors) {
                console.log(errors)
            }
        })
    });

    function removeAllInputInvalid() {
        $('.input-invalid').removeClass('input-invalid');
    }

    function generateUniqueId() {
        return Math.random().toString(36).substr(2, 9) + Date.now();
    }
})


