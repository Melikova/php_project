(function() {
    // validation inputs
    function validation(){
        removeErrors();
        let validation=false;
        const validation_data=[
            {id: '#sku', text: 'Sku field can not be empty', check:false},
            {id: '#name', text: 'Name field can not be empty', check:false},
            {id: '#price', text: 'Price field can not be empty', check:false},
            {id: '#productType', text: 'Product type should be selected', check:false},
            {id: '#size', text: 'Size field can not be empty', check:'dvd'},
            {id: '#height', text: 'Height field can not be empty', check:'furniture'},
            {id: '#width', text: 'Width field can not be empty', check:'furniture'},
            {id: '#length', text: 'Length field can not be empty', check:'furniture'},
            {id: '#weight', text: 'Weight field can not be empty', check:'book'}
        ];
        validation_data.forEach(e => {
            if(!e.check){
                if ($(e.id).val()==="" || $(e.id).val()==0){
                    setErrorFor($(e.id), e.text);
                    validation =true;
                }
            }else{
                if (!checkClassbyId(e.check)){
                    if($(e.id).val()===""){
                        setErrorFor($(e.id), e.text);
                        validation =true;
                    }
                }
            }
        });
        return validation;
    }
    
    function checkClassbyId(id){
        return $(`#${id}`).hasClass('d-none') ? true : false;
    }
    
    function setErrorFor(input, message){
        const formControl=input.parent();
        input.addClass('border border-danger');
        formControl.children('small').removeAttr('hidden');
        formControl.children('small').text(message);
    }
    
    function removeErrors(){
        $('input').removeClass('border border-danger');
        $("small").prop('hidden', true);
    }

    // product type selector
    $("#productType").on('change', function(){
        $(".dynamics .form-control").val(null);
        $(".dynamics>div").addClass("d-none");
        let selected=$(this).val();
        $(`#${selected}`).removeClass("d-none");
        $('#productType').removeClass('border border-danger');
        $("#productType").parent().children('small').prop('hidden', true);
    });

    // posting product data, adding to database
    $("#save").on('click', ()=>{
        if(!validation()){
            submitData();
        }
    });

    function submitData(){
        $.ajax({
            type: "POST",
            url: '/add',
            data: {
                sku: $("#sku").val(),
                name: $("#name").val(),
                price: $("#price").val(),
                type: $("#productType").val(),
                size:$("#size").val(),
                weight:$("#weight").val(),
                height:$("#height").val(),
                width:$("#width").val(),
                length:$("#length").val()
            },
            success: ()=>{
                window.location.href = "/";
            }
        });
    };

    // delete from database    
    $("#delete-product-btn").on('click', ()=>{
        let checked=[];
        $('.delete-checkbox:checked').each(function() {
            checked.push(this.value);
         });
         if (checked.length) {
            $.ajax({
                type: "POST",
                url: '/delete',
                data: {selected: checked},
                success: ()=> {
                    window.location.reload();
                }
            });
        }
    });

    // unmake changes if page's data wasn't submitted
    $("#cancel").on('click', ()=>{
        removeErrors();
        $('#productType').removeClass('border border-danger');
        $("#productType").parent().children('small').prop('hidden', true);
        $("input").val("");
    });
    
    $("#add").on('click', ()=>{
        $('.delete-checkbox').prop('checked', false);
    });
    
})();