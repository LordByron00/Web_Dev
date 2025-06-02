//You can pass multiple children via props to control placement:
import styles from './Page.module.css';

export default function Page({headerContent, mainContent, footerContent}) {
    return(
        <div className={styles.box}>
            <header className={styles.header}>{headerContent}</header>
            <main className={styles.main}>{mainContent}</main>
            <footer className={styles.footer}>{footerContent}</footer>
        </div>
    );
}