<div>
    <x-inputs.checkbox name="student__proposed_admission_{{$row->id}}"
                       id="student__proposed_admission_{{$row->id}}"
                       model="student.proposed_admission"
                       label="Предложено поступление"/>

    <x-inputs.checkbox name="student__applied_admission_{{$row->id}}"
                       id="student__applied_admission_{{$row->id}}"
                       model="student.applied_admission"
                       label="Подал заявление на поступление"/>

    <x-inputs.checkbox name="student__enrolled_profile_uz_{{$row->id}}"
                       id="student__enrolled_profile_uz_{{$row->id}}"
                       model="student.enrolled_profile_uz"
                       label="Зачислен в профильное УЗ"/>

    <x-inputs.checkbox name="student__concluded_target_agreement_{{$row->id}}"
                       id="student__concluded_target_agreement_{{$row->id}}"
                       model="student.concluded_target_agreement"
                       label="Заключил ЦД"/>
</div>
