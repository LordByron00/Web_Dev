import { useEffect, useRef, useState } from "react";

export default function UseRefTimer() {
    const prevOrderCountRef = useRef(0);
    const [orders, setOrders] = useState(0);
    const [newOrderNotif, setOrderNotif] = useState('');


    const updateOrders = () => {
        const randomNum = Math.round(Math.random() * 1);
        setOrders(orders + randomNum);
    }

    useEffect(() => {
        if (prevOrderCountRef.current < orders) {
            setOrderNotif('New Order has arrived!');
        }
        prevOrderCountRef.current = orders;
    }, [orders]);


    return(
        <>
            <p style={{color: 'red'}} onClick={() => setOrderNotif('')}>{newOrderNotif}</p>
            <p>ORDERS</p>
            <p>setState Orders: {orders}</p>
            <button type="button" onClick={() => updateOrders()}>Fetch Orders</button>
        </>
    );
}