const { createApp } = Vue;

createApp({
    data() {
        return {
            todoList: [],
            apiUrl: 'server.php',
            newQuantity: 1,
            newLista: '',
            message: '',
        }
    },
    methods: {
        readList() {
            axios.get(this.apiUrl).then((res) => {
                
            });
        },

        inserisci() {
            this.message = '';
            const newItem = {
                quantity: this.newQuantity,
                name: this.newLista,
                completed: false
            }
            if (this.newLista === '' || this.newQuantity < 1) {
                this.message = 'inserisci un valore valido';

            } else {
                let duplicate = false;
                for (let i = 0; i < this.listaSpesa.length; i++) {
                    if (this.listaSpesa[i].name === this.newLista) {
                        duplicate = true;
                    }
                }
                if (duplicate) {
                    this.message = 'questo prodotto è già presente nella lista';
                } else {
                    this.listaSpesa.push(newItem);
                }
            }

        },
        deleteList(index) {
            this.listaSpesa.splice(index, 1);
        },
        complete(index) {
            this.listaSpesa[index].completed = true;
        }
    }
}).mount('#app');