<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "laravel_cms";

$servername = "ui0tj7jn8pyv9lp6.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$username = "u7pbeubj6ga8pe6i";
$password = "ehtncz098sbfafvv";
$dbname = "fhzg7wv0o15wusmv";

?>
@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Cadastrar novo curso') }}</div>

                    <div class="card-body">
                        {!! Form::open(['method'=>'POST', 'action'=>'CoursesController@store']) !!}
                        @csrf

                        <div class="form-group row">
                            <label for="course" class="col-md-4 col-form-label text-md-right">{{ __('Curso') }}</label>

                            <div class="col-md-6">
                                <input id="course" type="text" placeholder="Ex: Violão" class="form-control{{ $errors->has('course') ? ' is-invalid' : '' }}" name="course" value="{{ old('course') }}" required autofocus>

                                @if ($errors->has('course'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('course')}}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>




                        <div class="form-group row">
                            <label for="pay_id" class="col-md-4 col-form-label text-md-right">{{ __('Mensalidade') }}</label>

                            <div class="col-md-3">

                                <select name="pay_id" class="form-control">
                                    <?php
                                    $conn = new mysqli($servername, $username, $password, $dbname);

                                    $query = "SELECT * from payments";
                                    $con1=$conn->query($query);

                                    ?>
                                    <?php while($dados=$con1->fetch_array() ){?>
                                    <option value="<?php echo $dados ["pay_id"];?>">R$ <?php echo $dados ["pay_value"];?>,00</option>
                                    <?php }?>
                                </select>
                            </div>

                            <?php

                            $conn = new mysqli($servername, $username, $password, $dbname);

                            if(isset($_POST['submit']))
                            {
                                $pay_id= $_POST['pay_id'];
                                $sql= $conn->prepare("Insert into courses(pay_id) values (:pay_id);");
                                $conn->begin_transaction();
                                $sql->execute(array(':pay_id'=>$pay_id));
                                $conn->commit();

                            }
                            ?>

                        </div>





                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Cadastrar') }}
                                </button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
