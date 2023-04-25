//create a layout component

import styled from "styled-components";

const StyledLayout = styled.div`
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background-color: #f5f5f5;
  color: #333;
  font-family: "Roboto", sans-serif;
  font-size: 16px;
  font-weight: 400;
  line-height: 1.5;
  text-align: center;
  padding: 0 20px;
  box-sizing: border-box;
`;

const Layout = ({ children, slug }) => {
  return <StyledLayout>{children}</StyledLayout>;
};

export default Layout;
