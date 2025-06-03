import BoxContent from './BoxContent';

// eslint-disable-next-line no-unused-vars
export default function BoxBorder(WrappedComponent) {
    return function BoxWithBorder(props) {
        return(
            <div style={{ border: '1px solid black', padding: '30px', backgroundColor: 'black', maxWidth: '650px', margin: '0 auto' }}>
                <WrappedComponent {...props} />
            </div>
        );
    }
}

