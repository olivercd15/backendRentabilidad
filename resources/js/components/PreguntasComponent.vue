<template>
    <div>
        <h1>Responder Las Preguntas</h1>
        <b-form >
            <b-col cols="12" md="4" >
                <span> ¿Cuánto conocimiento posees acerca de tu negocio?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4">
                <span>¿Tu producto o servicio utiliza servicios renovables?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4"  >
                <span>  ¿Cuál es el tamaño de tu negocio al nivel de empleados?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4" >
                <span> ¿Cuál es el sector de edad que abarca tu producto o servicio?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4" >
                <span> ¿Cómo cree que esta la competencia de su mercado?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4" >
                <span> ¿Tu producto puede llegar a otras zonas de la ciudad?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4"  >
                <span>  ¿Cuanto conocimiento posee tu equipo acerca del negocio?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
            <b-col cols="12" md="4">
                <span> ¿Cuál es el sector de edad que abarca tu producto o servicio?</span> <br>
                <b-form-select v-model="select" :options="pregunt" class="mt-2">
                </b-form-select>
                <p>Seleccion: {{select}}</p>
            </b-col>
        </b-form>
    </div>


</template>
<script>
export default {
    name: 'Preguntas',
    data() {
        return {
            select: null,
            pregunt: [
                {value: null, text:"Seleccionar Una Pregunta"},
                {value: "pregunta1", text:"pregunta1"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
            ],
            pregunt1: [
                {value: null, text:"Seleccionar Una Pregunta"},
                {value: "pregunta1", text:"pregunta1"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
            ],
            pregunt2: [
                {value: null, text:"Seleccionar Una Pregunta"},
                {value: "pregunta1", text:"pregunta1"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
            ],
            pregunt3: [
                {value: null, text:"Seleccionar Una Pregunta"},
                {value: "pregunta1", text:"pregunta1"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
                {value: "pregunta1", text:"pregunta11"},
            ],
        }
    }
};
</script>
