import styles from './Card.module.css';

export default function CardWithChildren({children}) {
    return(
        <div className={styles.Card}>
            {children}
        </div>
    );
}