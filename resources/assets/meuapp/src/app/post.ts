export class Post {
    constructor(
        public titulo?: string,
        public subtitulo?: string,
        public mensagem?: string,
        public arquivo?: string,
        public id?: number,
        public likes?: number
    ) {}
}
