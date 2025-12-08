@extends ('layout.page')

@section('subheader')
    <x-subheader title="Редактирование критериев"/>
@endsection

@section('content')

    <div class="row">
        <div class="col">
            <div class="card card-custom">
                <div class="card-header">
                    <div class="card-title font-weight-bold font-size-h3 font-hero-super">
                        Редактирование критериев отбора (результаты анкеты и  базового теста) профиля "{{ $userProfile->title }}"
                    </div>
                </div>
                <div class="card-body">

                    <div style="width:100%" align="right">
                        <table><tr>

                                <td>
                                    <a href="{{ route('user_profiles.deep_test_items',$userProfile->id) }}">
                                        <div style="border-radius:5px;padding:5px;background-color:#DBD6DB;">{{ __(' < Предыдущий блок') }}</div>
                                    </a>

                                </td><td width="5"></td>


                                <td>
                                    <a href="{{ route('user_profiles.edit',$userProfile->id) }}">
                                        <div style="border-radius:5px;padding:5px;background-color:#DBD6DB;">{{ __(' На главную') }}</div>
                                    </a>

                                </td><td width="5"></td><td>


                                    <a href="{{ route('user_profiles.deep_test_results',$userProfile->id) }}">
                                        <div style="border-radius:5px;padding:5px;background-color:#DBD6DB">{{ __(' Следующий блок >') }}</div>
                                    </a>

                                </td>
                            </tr></table>
                    </div>

                    @include('admin.user_profiles.include.result_messages')

                    <form action="{{ route('user_profiles.anket_results_update',$anketResults->first()->id) }}" method="POST" >

                        @csrf
                        <table>
                            <tr>
                                <td width="40"></td>
                                <td width="90%">

                                    <div class="row">


                                        <div class="col-xs-50 col-sm-50 col-md-50">
                                            <div class="form-group">


                                                <table class="table table-bordered table-striped">
                                                    <thead>
                                                    <tr>
                                                        <th scope="col">№</th>

                                                        <th scope="col"></th>
                                                        <th scope="col">Зеленая зона</th>
                                                        <th scope="col">Желтая зона</th>
                                                        <th scope="col" >Красная зона</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>


                                                            <tr>
                                                                <td>
                                                                   1
                                                                </td>
                                                                <td>
                                                                    Вероятность остаться в родном городе , от-до
                                                                </td>
                                                                <td style="background-color:greenyellow">

                                                                    <input type="text" name="anketResults[own_city][green]" value="{{@$control_values['own_city']['green']}}">

                                                                </td>
                                                                <td  style="background-color:yellow">

                                                                    <input type="text" name="anketResults[own_city][yellow]" value="{{@$control_values['own_city']['yellow']}}">


                                                                </td>

                                                                <td  style="background-color:indianred">


                                                                    <input type="text" name="anketResults[own_city][red]" value="{{@$control_values['own_city']['red']}}">

                                                                </td>
                                                            </tr>


                                                            <tr>
                                                                <td>
                                                                    2
                                                                </td>
                                                                <td>
                                                                    Типаж:
                                                                </td>
                                                                <td style="background-color:greenyellow">

                                                                  @php
                                                                    $type='green';
                                                                  @endphp

                                                                    @include('admin.user_profiles.include.anket_results_tipag')
                                                                </td>
                                                                <td  style="background-color:yellow">



                                                                    @php
                                                                        $type='yellow';
                                                                    @endphp

                                                                    @include('admin.user_profiles.include.anket_results_tipag')

                                                                </td>

                                                                <td  style="background-color:indianred">

                                                                    @php
                                                                        $type='red';
                                                                    @endphp

                                                                    @include('admin.user_profiles.include.anket_results_tipag')
                                                                </td>
                                                            </tr>



                                                            <tr>
                                                                <td>
                                                                    3
                                                                </td>
                                                                <td>
                                                                    Альтернативный компонент:
                                                                </td>
                                                                <td style="background-color:greenyellow">

                                                                    @php
                                                                        $type='green';
                                                                    @endphp

                                                                    @include('admin.user_profiles.include.anket_results_alt_component')
                                                                </td>
                                                                <td  style="background-color:yellow">



                                                                    @php
                                                                        $type='yellow';
                                                                    @endphp

                                                                    @include('admin.user_profiles.include.anket_results_alt_component')

                                                                </td>

                                                                <td  style="background-color:indianred">

                                                                    @php
                                                                        $type='red';
                                                                    @endphp

                                                                    @include('admin.user_profiles.include.anket_results_alt_component')
                                                                </td>
                                                            </tr>




                                                    </tbody>


                                            </div>
                                        </div>
                                    </div>


                                </td>
                            </tr>
                        </table>
                        <div style="width:100%" align="right">
                            <table><tr>

                                    <td>
                                        <a href="{{ route('user_profiles.deep_test_items',$userProfile->id) }}">
                                            <div style="border-radius:5px;padding:5px;background-color:#DBD6DB;">{{ __(' < Предыдущий блок') }}</div>
                                        </a>

                                    </td><td width="5"></td>


                                    <td>
                                        <a href="{{ route('user_profiles.edit',$userProfile->id) }}">
                                            <div style="border-radius:5px;padding:5px;background-color:#DBD6DB;">{{ __(' На главную') }}</div>
                                        </a>

                                    </td><td width="5"></td><td>


                                        <a href="{{ route('user_profiles.deep_test_results',$userProfile->id) }}">
                                            <div style="border-radius:5px;padding:5px;background-color:#DBD6DB">{{ __(' Следующий блок >') }}</div>
                                        </a>

                                    </td>
                                </tr></table>
                        </div>



                        <div class="col-xs-12 col-sm-12 col-md-12 text-left">

                            <button type="submit" class="btn btn-primary">Сохранить</button>
                            <x-inputs.button-link type="btn-outline-success" link="{{ route('user_profiles.edit',$userProfile->id) }}" title="{{ __(' Назад') }}"/>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </div>

@endsection