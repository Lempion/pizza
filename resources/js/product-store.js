let routeProductStore = $('.routeProductStore').val();
let routeComboStore = $('.routeComboStore').val();

let token = $('[name="_token"]').val();

window.storeProduct = function () {

    let defaultFields = validateDefaultFields();

    if (defaultFields === false) {
        return;
    }

    let productSizesCreated = $('.size-product-tbody').find('tr.tr-created');

    if (productSizesCreated.length === 0) {
        toastError('Add at least 1 size');
        return;
    }

    let productSizesInputs = [];

    productSizesCreated.filter(function () {
        if ($(this).attr('class').split(' ').length === 1) {
            let arraySizes = {};

            $(this).find('.tr-input').map(function (key, value) {
                let val = $(value).val();

                if ($(value).attr('type') === 'checkbox') {
                    val = ($(value).is(':checked') ? 1 : 0);
                }

                arraySizes[$(value).attr('name')] = val
            })
            productSizesInputs.push(arraySizes);
        }
    });

    $.ajax({
        url: routeProductStore,
        method: 'POST',
        data: {
            'name': defaultFields.name,
            'category': defaultFields.category,
            'description': defaultFields.description,
            'inStock': defaultFields.inStock,
            'picture': defaultFields.picture,
            'productSizes': productSizesInputs,
            '_token': token
        },
        success(answer) {
            toastSuccess(answer);
            returnFormStart();
        },
        error(errors) {
            console.log(errors)
        }
    })
}

window.storeProductCombo = function () {
    let defaultFields = validateDefaultFields();

    if (defaultFields === false) {
        return;
    }

    let price = $('#combo-product-price').val();

    if (price.length == 0 || price == 0) {
        $('#combo-product-price').addClass('input-invalid');
        toastError('Write the price for the combo');
        return;
    }

    let productsForCombo = $('.added-product-tbody').find('tr.added-product');

    if (productsForCombo.length < 2) {
        toastError('Select 2 products for combo');
        return;
    }

    let readyProductsForCombo = [];

    productsForCombo.filter(function () {
        readyProductsForCombo.push({
            'relatedProductId': $(this).attr('data-product-id-modal-tr'),
            'sizeProductId': $(this).find('.selector-added-size-products').val()
        });
    })

    $.ajax({
        url: routeComboStore,
        method: 'POST',
        data: {
            'name': defaultFields.name,
            'category': defaultFields.category,
            'description': defaultFields.description,
            'inStock': defaultFields.inStock,
            'picture': defaultFields.picture,
            'price': price,
            'productForCombo': readyProductsForCombo,
            '_token': token
        },
        success(answer) {
            toastSuccess(answer);
            returnFormStart();
        },
        error(errors) {
            console.log(errors)
        }
    })
}

function validateDefaultFields() {
    let category = $('#category').val();

    let name = $('#name').val();
    if (name.length === 0) {
        $('#name').addClass('input-invalid');
        toastError('Field name invalid');
        return false;
    }

    let description = $('#description').val();
    if (description.length === 0) {
        $('#description').addClass('input-invalid');
        toastError('Field description invalid');
        return false;
    }

    let inStock = $('#in_stock').val();
    if (inStock.length === 0) {
        $('#in_stock').addClass('input-invalid');
        toastError('Field inStock invalid');
        return false;
    }

    let picture = $('#current_img_path').val();
    if (picture.length === 0) {
        $('#current_img_path').addClass('input-invalid');
        toastError('Field picture invalid');
        return false;
    }

    return {
        'category': category,
        'name': name,
        'description': description,
        'inStock': inStock,
        'picture': picture,
    };
}

function returnFormStart() {
    $('.product-input').val('');
    $('.product-img').attr('src', '');
    $('.selector-category').val(0);
    $('.table-wrapper').empty();
}
