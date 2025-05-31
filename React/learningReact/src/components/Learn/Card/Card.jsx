import styles from './Card.module.css';

export default function Card() {
    return(
        <div className={styles.Card} >
            <img src="/src/assets/images/Chrollo.jpg" alt="Chrollo Lucilfer" className={styles.cardIMG}/>
            <p className={styles.cardP}>Chrollo Lucilfer</p>
        </div>
    );
}