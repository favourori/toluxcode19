@extends('layouts.admin.master')


@section('content')
<!-- <button type="button" data-toggle="modal" data-target='#create-type' class="btn btn-info">Create Subtype <i style="font-weight: bolder;" class="la la-plus"></i></button>
<br></br> -->
<h4 class="page-title">Send Email to Users</h4>

<div class="row">

       
        <div class="col-md-8 col-lg-8 col-sm-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">Send Email to users</div>
                </div>
                <div class="card-body">
                    
                    <form action="/admin/manage/mail/send" method="POST" role="form">
                        
                        <div class="form-group">
                            <label for="">Message</label>
                            <textarea rows="6" class="form-control" name="message" id="" placeholder="Type your mail here"></textarea>
                        </div>
                        {{csrf_field()}}

                        <div class="form-group">
                            Send Email To:<br><br>
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="user" value="all" checked="checked">
                                <span class="form-radio-sign">All</span>
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;
                            <label class="form-radio-label">
                                <input class="form-radio-input" type="radio" name="user" value="seller">
                                <span class="form-radio-sign">Verified Sellers</span>
                            </label>
                        </div>
                    
                        <div class="form-group">
                    
                        <button type="submit" class="btn btn-primary">Send</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        
</div>
@endsection

@section('custom-script')

<script>
    function triggerFile(){
           $("#image").trigger('click');
       }

         function readIMG(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#drawimage').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function(){
            readIMG(this);
        });

        function deleteUser(id){
            var complete = confirm('Are you sure you want to delete this user?');
            console.log(complete);
            if(!complete){
                return;
            }

            axios.post('/admin/manage/user/delete/'+id, {_method: 'delete'})
                .then(response => {
                    success('Success', response.data.message);
                    location.reload();
                })
                .catch(err => {
                   
                });
        }
</script>
@endsection
